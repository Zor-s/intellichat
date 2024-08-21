/*
 * Install the Generative AI SDK
 *
 * $ npm install @google/generative-ai
 */
require('dotenv').config()
const {
    GoogleGenerativeAI,
    HarmCategory,
    HarmBlockThreshold,
  } = require("@google/generative-ai");
  
  const apiKey = process.env.GEMINI_API_KEY;
  const genAI = new GoogleGenerativeAI(apiKey);
  
  const model = genAI.getGenerativeModel({
    model: "gemini-1.5-flash",
  });
  
  const generationConfig = {
    temperature: 1,
    topP: 0.95,
    topK: 64,
    maxOutputTokens: 8192,
    responseMimeType: "text/plain",
  };

  
  
  let chatSession = null;
  let history = [];
  

  function resetChatSession() {
    chatSession = null;
    history = [];
  }


  async function getChatResponse(message) {
    if (!chatSession) {
      chatSession = model.startChat({
        generationConfig,
        history: [],
      });
    }
  
    // Add the user's message to the history
    history.push({ role: "user", content: message });
  
    const result = await chatSession.sendMessage(message);
  
    // Add the bot's response to the history
    history.push({ role: "bot", content: result.response.text() });
  
    return result.response.text();
  }
  
  module.exports = { resetChatSession, getChatResponse };
  