const express = require("express");
const app = express();
const port = 3000;

// Middleware to parse form data
app.use(express.urlencoded({ extended: true }));

app.use(express.static("views"));

app.set('view engine', 'ejs');

app.post('/submit', (req, res) => {
  const username = req.body.username;
  // Render the next page with the username
  res.render('intellichat', { username: username });
});






app.listen(port, () => {
  console.log(`Server listening on port ${port}`);
});
