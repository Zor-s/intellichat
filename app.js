const express = require("express");
const app = express();
const port = 3000;
const path = require("path");
const { resetChatSession, getChatResponse } = require("./utils/chatbot");

// Middleware to parse form data
app.use(express.urlencoded({ extended: true }));
app.use(express.static("views"));
app.set("view engine", "ejs");
app.use(express.json());
app.set("views", path.join(__dirname, "views"));

app.post("/submit", (req, res) => {
  const username = req.body.username;
  // Render the next page with the username
  resetChatSession();
  res.render("intellichat", { username: username });
});

app.post("/api/chat", async (req, res) => {
  try {
    const { message } = req.body;
    const response = await getChatResponse(message);
    res.json({ response });
  } catch (error) {
    console.error(error);
    res.status(500).json({ error: "Something went wrong" });
  }
});

app.listen(port, () => {
  console.log(`Server listening on port ${port}`);
});
