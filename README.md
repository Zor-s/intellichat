# IntelliChat 🤖

IntelliChat is a modern, responsive AI assistant powered by Google's Gemini Pro API. It provides a seamless chat experience with a clean UI, capable of assisting with tasks, answering questions, and engaging in natural conversations.

## Features
- **Stateless Architecture:** Designed to work perfectly in serverless environments like Vercel.
- **Contextual Memory:** Maintains conversation history for intelligent, multi-turn interactions.
- **Dynamic UI:** Responsive design built with Bootstrap 5 and EJS templating.
- **Gemini Integration:** Powered by the `gemini-3-flash-preview` model for fast and accurate responses.

## Tech Stack
- **Backend:** Node.js, Express.js
- **Frontend:** EJS, Bootstrap 5, Vanilla JavaScript
- **AI:** @google/generative-ai (Gemini API)
- **Deployment:** Optimized for Vercel

## Local Setup

1. **Clone the repository:**
   ```bash
   git clone <your-repo-url>
   cd intellichat
   ```

2. **Install dependencies:**
   ```bash
   npm install
   ```

3. **Set up environment variables:**
   Create a `.env` file in the root directory and add your API key:
   ```env
   GEMINI_API_KEY=your_actual_api_key_here
   ```

4. **Run the application:**
   ```bash
   npm start
   ```
   Open `http://localhost:3000` in your browser.

## Deployment on Vercel

This project is pre-configured for Vercel deployment.

1. Push your code to a GitHub/GitLab/Bitbucket repository.
2. Connect your repository to Vercel.
3. Add `GEMINI_API_KEY` to the **Environment Variables** in your Vercel project settings.
4. Deploy!

## Authors
- Zoren
- Dinno

## License
MIT