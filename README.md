<<<<<<< HEAD
# Stock Market Prediction Web App using Machine Learning and Sentiment Analysis

This project is a web application designed to predict stock market trends using a combination of machine learning algorithms and sentiment analysis of tweets. By integrating real-time public sentiment with historical data, the app aims to provide more accurate and timely investment insights.

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Features

- **Real-time Sentiment Analysis**: Integrates Twitter API to fetch live tweets and analyze their sentiment.
- **Machine Learning Predictions**: Uses historical stock data and advanced machine learning models to predict future stock prices.
- **Interactive Dashboards**: Visualizes stock trends, sentiment analysis results, and prediction outcomes.
- **User Authentication**: Secure user login and registration functionality.

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript, Bootstrap
- **Backend**: Flask, SQLAlchemy
- **Database**: SQLite
- **Machine Learning**: Scikit-Learn, Pandas, Numpy
- **Sentiment Analysis**: VaderSentiment, Tweepy
- **Visualization**: Matplotlib, Plotly

## Installation

Follow these steps to get the project up and running on your local machine.

1. **Clone the repository:**
   ```bash
   git clone https://github.com/kaushikjadhav01/Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis.git
   cd Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis

    Create a virtual environment:

    bash

python -m venv venv

Activate the virtual environment:

    On Windows:

    bash

venv\Scripts\activate

On macOS/Linux:

bash

    source venv/bin/activate

Install the required packages:

bash

pip install -r requirements.txt

Set up environment variables:

    Create a .env file in the root directory of the project.
    Add your Twitter API keys and other necessary configurations to the .env file.

Example:

env

TWITTER_API_KEY=your_api_key
TWITTER_API_SECRET_KEY=your_api_secret_key
TWITTER_ACCESS_TOKEN=your_access_token
TWITTER_ACCESS_TOKEN_SECRET=your_access_token_secret

Initialize the database:

bash

flask db init
flask db migrate -m "Initial migration."
flask db upgrade

Run the application:

bash

    flask run

    Access the application:
    Open your browser and navigate to http://127.0.0.1:5000.

Usage

    Register/Login: Create an account or log in to access the application.
    Select Stock: Choose the stock you want to analyze.
    Fetch Data: The application will retrieve historical stock data and live tweets related to the selected stock.
    View Predictions: Analyze the predicted stock prices and sentiment analysis results on the interactive dashboard.

Project Structure

arduino

Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis/
│
├── app/
│   ├── __init__.py
│   ├── routes.py
│   ├── models.py
│   ├── static/
│   ├── templates/
│   └── utils/
├── migrations/
├── tests/
├── .env
├── .gitignore
├── README.md
├── requirements.txt
└── run.py

Contributing

Contributions are welcome! Please follow these steps:

    Fork the repository.
    Create a new branch (git checkout -b feature-branch).
    Commit your changes (git commit -am 'Add new feature').
    Push to the branch (git push origin feature-branch).
    Open a Pull Request.

License

This project is licensed under the MIT License. See the LICENSE file for details.
Contact

For any inquiries or feedback, please contact:

    Naim Katiman
    Email: naim@example.com
    GitHub: naimkatiman
=======
[![DOI](https://zenodo.org/badge/742607049.svg)](https://zenodo.org/doi/10.5281/zenodo.10498988)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/kaushikjadhav01/Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis/blob/master/LICENSE)
[![Code Coverage](https://codecov.io/gh/NCSU-Fall-2022-SE-Project-Team-11/XpensAuditor---Group-11/branch/main/graphs/badge.svg)](https://codecov.io)
![GitHub contributors](https://img.shields.io/badge/Contributors-1-brightgreen)
[![Documentation Status](https://readthedocs.org/projects/ansicolortags/badge/?version=latest)](https://github.com/kaushikjadhav01/Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis/edit/master/README.md)
![GitHub release (latest by date)](https://img.shields.io/github/v/release/kaushikjadhav01/Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis)
![GitHub issues](https://img.shields.io/github/issues/kaushikjadhav01/Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis)
![GitHub closed issues](https://img.shields.io/github/issues-closed/kaushikjadhav01/Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis)
[![GitHub Repo Size](https://img.shields.io/github/repo-size/kaushikjadhav01/Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis.svg)](https://img.shields.io/github/repo-size/kaushikjadhav01/Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis.svg)
[![GitHub last commit](https://img.shields.io/github/last-commit/kaushikjadhav01/Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis)](https://github.com/kaushikjadhav01/Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis/commits/master)
![GitHub language count](https://img.shields.io/github/languages/count/kaushikjadhav01/Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis)
[![Commit Acitivity](https://img.shields.io/github/commit-activity/m/kaushikjadhav01/Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis)](https://github.com/kaushikjadhav01/Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis)
[![Code Size](https://img.shields.io/github/languages/code-size/kaushikjadhav01/Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis)](mpp-backend)
![GitHub forks](https://img.shields.io/github/forks/kaushikjadhav01/Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis?style=social)
![GitHub stars](https://img.shields.io/github/stars/kaushikjadhav01/Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis?style=social)
![GitHub watchers](https://img.shields.io/github/watchers/kaushikjadhav01/Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis?style=social)

# Stock-Market-Prediction-Web-App-using-Machine-Learning
**Stock Market Prediction** Web App based on **Machine Learning** and **Sentiment Analysis** of Tweets **(API keys included in code)**. The front end of the Web App is based on **Flask** and **Wordpress**. The App forecasts stock prices of the next seven days for any given stock under **NASDAQ** or **NSE** as input by the user. Predictions are made using three algorithms: **ARIMA, LSTM, Linear Regression**. The Web App combines the predicted prices of the next seven days with the **sentiment analysis of tweets** to give recommendation whether the price is going to rise or fall.

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li><a href="#system-description-and-functions">System Description and Functions</a></li>
    <li><a href="#built-with">Built With</a></li>
    <li><a href="#installation">Installation</a></li>
    <li><a href="#authors">Authors</a></li>
    <li><a href="#links">Links</a></li>
  </ol>
</details>

## System Description and Functions
**Demo Video:** <br/>
[<img src="https://github.com/kaushikjadhav01/Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis/blob/master/screenshots/banner.png">](https://www.youtube.com/watch?v=xnq7mBdJAJk "Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis")<br/><br/>
**Screenshots:** <br/>
<img src="https://github.com/kaushikjadhav01/Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis/blob/master/screenshots/banner.png">
<img src="https://github.com/kaushikjadhav01/Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis/blob/master/screenshots/banner2.PNG">
<img src="https://github.com/kaushikjadhav01/Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis/blob/master/screenshots/11-resuts.png" width="750">
<img src="https://github.com/kaushikjadhav01/Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis/blob/master/screenshots/wp-admin.PNG" width="750">

**Admin Creds:** <br/>
Username: admin <br/>
Email Address: stockpredictorapp@gmail.com <br/>
Password: Samplepass@123 <br/>

There are two roles in the system: **Admin** and **User**.<br/><br/>
Users can:<br/>
<ol>
    <li>Register and Login </li>
    <li>Check Real Time stock prices</li>
    <li>Read recent news about different stocks</li>
    <li>Currency Converter</li>
    <li>Edit or delete their own profile</li>
    <li>Educate the user about stocks</li>
    <li>Download list of stock tickers</li>
    <li>Predict Stock prices for the next 7 days for all NASDAQ and NSE stocks</li>
</ol>

Admin can:<br/>
<ol>
    <li>Create, Retrieve, Update Delete Users.</li>
    <li>Manually trigger emails.</li>
    <li>Register and Login </li>
    <li>Check Real Time stock prices</li>
    <li>Read recent news about different stocks</li>
    <li>Currency Converter</li>
    <li>Edit or delete their own profile</li>
    <li>Educate the user about stocks</li>
    <li>Download list of stock tickers</li>
    <li>Predict Stock prices for the next 7 days for all NASDAQ and NSE stocks</li>
</ol>

## Built With
![Python](https://img.shields.io/badge/Python-3776AB?style=for-the-badge&logo=python&logoColor=white)
![Javascript](https://img.shields.io/badge/JavaScript-323330?style=for-the-badge&logo=javascript&logoColor=F7DF1E)
![django](https://img.shields.io/badge/Django-20232A?style=for-the-badge&logo=django&logoColor=white)
![nodejs](https://img.shields.io/badge/Node.js-43853D?style=for-the-badge&logo=node.js&logoColor=white)
![react](https://img.shields.io/badge/React-20232A?style=for-the-badge&logo=react&logoColor=61DAFB)
![html](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![css](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![jquery](https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white)
![wordpress](https://img.shields.io/badge/Wordpress-006699?style=for-the-badge&logo=wordpress&logoColor=white)
![Keras](https://img.shields.io/badge/Keras-red?style=for-the-badge&logo=keras&logoColor=white)
![Numpy](https://img.shields.io/badge/Numpy-blue?style=for-the-badge&logo=numpy&logoColor=white)
![pandas](https://img.shields.io/badge/Pandas-green?style=for-the-badge&logo=pandas&logoColor=white)

## Installation
1. Install XAMPP server
2. Download wordpress zip folder from <a href="https://drive.google.com/file/d/1J753gY0Nv6HGSkPngSxrogNghDQnoIlk/view?usp=sharing">this link</a>.
3. Extract the downloaded zip into ```htdocs``` folder of XAMPP.
4. Open the ```wp-config.php``` file from the extracted folder and add your phpmyadmin username and password.
5. Go to phpmyadmin, create a new database called ```wordpress```.
6. Select this database, go to Operations tab and Import the ```wordpress.sql``` file into this created databse.
7. Clone the repo, cd into it
4. Run ```pip install -r requirements.txt```
5. Run ```python main.py``` to start server.
7. Go to ```localhost/wordpress``` to access the app.

Find more screenshots in the <b>screenshots folder</b> Or <a href="https://github.com/kaushikjadhav01/Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis/tree/master/screenshots">click here</a>


## Authors
### Kaushik Jadhav
<ul>
<li>Github: https://github.com/kaushikjadhav01</li>
<li>Medium: https://medium.com/@kaushikjadhav01</li>
<li>LinkedIn: https://www.linkedin.com/in/kaushikjadhav01/</li>
<li>Portfolio: http://kajadhav.me/</li>
<li>Linked In: https://www.linkedin.com/in/kajadhav/
<li>Dev.to: https://dev.to/kaushikjadhav01
<li>Codesignal: https://app.codesignal.com/profile/kaushik_j_vtc
<li>Google Scholar: https://scholar.google.com/citations?user=iRYcFi0AAAAJ
<li>Daily.dev: https://app.daily.dev/kaushikjadhav01
<li>Google devs: https://developers.google.com/profile/u/kaushikjadhav01
<li>Stack Overflow: https://stackoverflow.com/users/21890981/kaushik-jadhav
</ul>

## Links
* [Issue tracker](https://github.com/kaushikjadhav01/Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis/issues)
* [Source code](https://github.com/kaushikjadhav01/Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis)
>>>>>>> 5fd7b9f (update on github)
