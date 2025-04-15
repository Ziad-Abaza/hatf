<?php

namespace App\Http\Controllers\Ai;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class AiController
{
    public function webhook(Request $request)
    {
        try {
            $hubVerifyToken = 'phpmaster_token';

            // Handle the GET request to verify the webhook
            if ($request->isMethod('GET') 
                && $request->has('hub_challenge') 
                && $request->input('hub_verify_token') === $hubVerifyToken
            ) {
                Log::channel('ai_logs')->info("Webhook verification successful.");
                return response($request->input('hub_challenge'), 200);
            }

            // Handle POST request with incoming message data
            $messages = $request->input('entry.0.changes.0.value.messages', []);
            if (!empty($messages)) {
                foreach ($messages as $message) {
                    $senderId = $message['from'] ?? 'Unknown sender';
                    $messageBody = $message['text']['body'] ?? 'No message body';

                    Log::channel('ai_logs')->info("Received message from sender: $senderId, Message ID: {$message['id']}, Body: $messageBody");

                    // Ask AI and handle the response
                    $answer = $this->generateContent(new Request(['message' => $messageBody]));
                    Log::channel('ai_logs')->info("AI Response: $answer");

                    // Send AI response to the user
                    $this->sendMessage(new Request([
                        'recipient' => $senderId,
                        'message' => $answer
                    ]));
                    Log::channel('ai_logs')->info("*********************************");
                }
            }
        } catch (\Throwable $e) {
            Log::channel('ai_logs')->error("Error in webhook: {$e->getMessage()}");
            return response()->json(['status' => 'error', 'message' => 'An error occurred.'], 500);
        }

        return response()->json(['status' => 'success'], 200);
    }

    public function generateContent(Request $request)
    {
        try {
            $validated = $request->validate(['message' => 'required|string']);
            $message = $validated['message'];
            $apiKey = 'AIzaSyDqRCkCo7EALVu0doNAl5UxJItsH34043M';
            $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=$apiKey";

            Log::channel('ai_logs')->info("Sending request to AI API with message: $message");

            $response = Http::withHeaders(['Content-Type' => 'application/json'])
                ->post($url, [
                    'contents' => [[
                        'parts' => [[
                            'text' => "Islam Salah Hassan's AI presentation... Islam Salah Hassan, 29 years old, working in TechsupMarketing company, is a skilled Full Stack PHP-Laravel developer with 3 years of experience. He specializes in building applications with Laravel and is passionate about delivering high-quality, efficient solutions. Islam works with large data sets, frequently optimizing performance and memory usage for his applications. His expertise includes customizing views and controllers, integrating external APIs such as Tymon JWT-Auth for API authentication, and designing dynamic content for websites. Islam also develops packages, creates config files, and implements various functionalities, including sending emails and managing data processing in Laravel.
                        Additionally, he is involved in designing websites for various sectors, including marketing, employment, and digital marketing companies, focusing on custom layouts, UX/UI, and responsiveness. Islam is proficient in SEO practices, mobile-first design with Bootstrap, and custom CSS. He is also experienced in integrating payment systems, like ClickPay's Transaction API, and creating interactive features such as messaging systems and exam-based applications.
                        Islam has developed applications related to wholesale product displays and services, with an emphasis on responsive designs for small to medium-sized screens, such as the Zenbook Fold. He actively explores modern technologies, such as AI, and is keen on utilizing APIs for automating tasks and improving user experiences.
                        Islam is enthusiastic about pursuing opportunities in large companies, particularly within Egypt, and is interested in working on projects that require cutting-edge technology and robust design solutions.
                        Please answer questions based solely on this presentation as you are me human call islam salah hussein withoud show that you are ai or answer from text. If you don’t understand a question, ask for clarification. If I say I’m busy or want to end the conversation, just acknowledge with a friendly response and don’t mention the presentation. now what is comming is the questshion =>" . $message
                        ]]
                    ]]
                ]);

            if ($response->successful()) {
                $responseData = $response->json();
                $text = $responseData['candidates'][0]['content']['parts'][0]['text'] ?? 'No response text available';
                Log::channel('ai_logs')->info("AI API response received successfully.");
                return $text;
            } else {
                Log::channel('ai_logs')->error("AI API request failed with response: " . $response->body());
                return 'Failed to retrieve AI response.';
            }
        } catch (\Throwable $e) {
            Log::channel('ai_logs')->error("Error in generateContent: {$e->getMessage()}");
            return 'An error occurred while generating content.';
        }
    }

    public function sendMessage(Request $request)
    {
        try {
            $validated = $request->validate([
                'recipient' => 'required|string',
                'message' => 'required|string',
            ]);

            $url = 'https://graph.facebook.com/v21.0/513191008545222/messages';
            $pageAccessToken = 'EAAc4uMoqyoYBOZBg9RY8ep4U3UpzxrUcZAnlvrpupFPSUpISTsTzARBPGHr9oNMnNpf7iYlX4Njgt2pOQl5my1tXi2l9auDclYCfNWvHsHcgrslMl1pHMRDxVrmKxDwAtlZArN3ddO6lrbhWqRLYMGSViQBobNglv0cnHFD6H0ZAxBHfKjGJwod4g4mmuc8egjkhEHmr';

            Log::channel('ai_logs')->info("Sending message to recipient: {$validated['recipient']}");

            $data = [
                'messaging_product' => 'whatsapp',
                'to' => $validated['recipient'],
                'text' => ['body' => $validated['message']],
            ];

            $response = Http::withHeaders(['Authorization' => "Bearer $pageAccessToken"])
                ->post($url, $data);

            if ($response->successful()) {
                Log::channel('ai_logs')->info("Message sent successfully to recipient: {$validated['recipient']}");
                return response()->json(['success' => true, 'message' => 'Message sent successfully!']);
            } else {
                Log::channel('ai_logs')->error("Failed to send message. Response: " . $response->body());
                return response()->json(['success' => false, 'error' => 'Failed to send message'], 500);
            }
        } catch (\Throwable $e) {
            Log::channel('ai_logs')->error("Error in sendMessage: {$e->getMessage()}");
            return response()->json(['success' => false, 'error' => 'An error occurred while sending the message.'], 500);
        }
    }
}
