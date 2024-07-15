# MLstockApp: Stock Market Prediction Web App using Machine Learning and Sentiment Analysis

This project is a web application designed to predict stock market trends using a combination of machine learning algorithms and sentiment analysis of tweets. By integrating real-time public sentiment with historical data, MLstockApp aims to provide more accurate and timely investment insights.

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
   ```

2. **Create a virtual environment:**
   ```bash
   python -m venv venv
   ```

3. **Activate the virtual environment:**
   - On Windows:
     ```bash
     venv\Scripts\activate
     ```
   - On macOS/Linux:
     ```bash
     source venv/bin/activate
     ```

4. **Install the required packages:**
   ```bash
   pip install -r requirements.txt
   ```

5. **Set up environment variables:**
   - Create a `.env` file in the root directory of the project.
   - Add your Twitter API keys and other necessary configurations to the `.env` file.

   Example:
   ```env
   TWITTER_API_KEY=your_api_key
   TWITTER_API_SECRET_KEY=your_api_secret_key
   TWITTER_ACCESS_TOKEN=your_access_token
   TWITTER_ACCESS_TOKEN_SECRET=your_access_token_secret
   ```

6. **Initialize the database:**
   ```bash
   flask db init
   flask db migrate -m "Initial migration."
   flask db upgrade
   ```

7. **Run the application:**
   ```bash
   flask run
   ```

8. **Access the application:**
   Open your browser and navigate to [http://127.0.0.1:5000](http://127.0.0.1:5000).

## Usage

1. **Register/Login**: Create an account or log in to access the application.
2. **Select Stock**: Choose the stock you want to analyze.
3. **Fetch Data**: The application will retrieve historical stock data and live tweets related to the selected stock.
4. **View Predictions**: Analyze the predicted stock prices and sentiment analysis results on the interactive dashboard.

## Project Structure

```plaintext
MLstockApp/
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
```

## Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit your changes (`git commit -am 'Add new feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Open a Pull Request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contact

For any questions or feedback, feel free to open an issue or contact us at [your_email@example.com].

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

## System Description and Functions

**Screenshots:** <br/>
<img src="https://github.com/kaushikjadhav01/Stock-Market-Prediction-Web-App-using-Machine-Learning-And-Sentiment-Analysis/blob/master/screenshots/11-resuts.png" width="750">


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

