const express = require('express');
const bodyParser = require('body-parser');
const app = express();

app.use(bodyParser.urlencoded({ extended: true }));

// Vulnerable login endpoint
app.post('/login', (req, res) => {
    const { username, password } = req.body;
    // Insecure authentication example
    if (username === 'admin' && password === 'password') {
        res.send('Logged in as admin');
    } else {
        res.send('Invalid credentials');
    }
});

// Vulnerable search endpoint
app.get('/search', (req, res) => {
    const query = req.query.query;
    // Example of a vulnerable search implementation
    res.send(`Search results for: ${query}`);
});

app.listen(3000, () => {
    console.log('Server is running on http://localhost:3000');
});
