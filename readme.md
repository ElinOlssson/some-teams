# Some Teams

Some Teams is a simple website that displays information about different women's football teams.

## About the Project

The website displays football teams as cards. Each card shows the team's name and logo. When hovering over a card, additional information appears:

- League
- UEFA coefficient ranking
- League position
- City
- Link to the team's official website

The website also includes an About page with information about the author.

## Repository Structure

The repository contains the following files:

- `index.php` – The homepage displaying the football teams.
- `about.php` – Information about the author.
- `header.php` – The shared header and navigation.
- `data.php` – Contains information about the football teams.
- `style.css` – Contains the styling and layout of the website.
- `README.md` – Information about the project.
- `LICENSE` – The project's MIT license.

## Technologies and Tools

- PHP: Used `foreach` loops to retrieve and display team information from `data.php`.
- HTML: Used to structure the website.
- CSS: Used for styling, layout, and hover effects. For example, additional team information is displayed when hovering over a card to create a cleaner layout.
- FileZilla: Used to transfer the website files to the web server.
- One.com: Used to host the website.
- Git and GitHub: Used for version control and storing the project.

## Installation

To run the website locally:

1. Clone the repository:

   `git clone https://github.com/ElinOlssson/some-teams.git`

2. Open the project folder:

   `cd some-teams`

3. Start a local PHP server:

   `php -S localhost:8000`

4. Open `http://localhost:8000` in your browser.


## Deployment

The website was published using one.com and FileZilla.

1. Log in to one.com and find the SSH & FTP connection details.
2. Open FileZilla and connect to the server using the SFTP credentials.
3. Transfer the project files to the `some-teams` folder inside `public_html`.
4. Open the website in a browser to verify that it works.

## Live Website

https://elinsofiaolsson.com/some-teams/

## Author

Elin Olsson

Web Development student at Yrgo, Gothenburg.

## License

This project is licensed under the MIT License. See the `LICENSE` file for more information.
