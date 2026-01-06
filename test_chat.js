require('dotenv').config();
const { GoogleGenerativeAI } = require("@google/generative-ai");

async function testChat() {
    const apiKey = process.env.GEMINI_API_KEY;
    const genAI = new GoogleGenerativeAI(apiKey);
    const model = genAI.getGenerativeModel({
        model: "gemini-flash-latest",
    });

    const chatSession = model.startChat({
        history: [],
    });

    try {
        console.log("Sending 'Hello'...");
        const result = await chatSession.sendMessage("Hello");
        console.log("Response:", result.response.text());

        console.log("Sending 'What is your name?'...");
        const result2 = await chatSession.sendMessage("What is your name?");
        console.log("Response 2:", result2.response.text());
    } catch (e) {
        console.log("Error:");
        console.log(e);
    }
}

testChat();
