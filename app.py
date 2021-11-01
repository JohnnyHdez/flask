from flask import Flask
from flask import render_template

app = Flask(__name__)

@app.route('/')
def index():
	return render_template('index.html')


@app.route('/anime')
def anime():
	lista = ['Sword art online', 'Tensei shitara slime datta ken', 'Jujutsu kaisen', 'shokugeki no soma']
	return render_template('anime.php')


if __name__ == '__main__':
	app.run(debug=True)