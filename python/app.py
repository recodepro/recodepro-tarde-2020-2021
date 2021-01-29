from flask import Flask, render_template, request

app = Flask(__name__, template_folder="./src/views")


@app.route("/", methods=["GET", "POST"])
def home():
    if (request.method == "GET"):
        return render_template("index.html")
    else:
        if (request.form["num1"] != "" and request.form["num2"] != ""):
            num1 = request.form["num1"]
            num2 = request.form["num2"]

            if (request.form["opc"] == "soma"):
                soma = int(num1) + int(num2)
                return {
                    "Resultado": str(soma)
                }

            elif (request.form['opc'] == "subt"):
                subt = int(num1) - int(num2)
                return {
                    "Resultado": str(subt)
                }

            elif (request.form['opc'] == "mult"):
                mult = int(num1) * int(num2)
                return {
                    "Resultado": str(mult)
                }

            else:
                divi = int(num1) // int(num2)
                return {
                    "Resultado": str(divi)
                }
        else:
            return "Informe um valor válido!"

# @app.route("/<int:id>")
# def Home_id(id):
#     return str(id + 1)


@app.errorhandler(404)
def not_found(error):
    return render_template("error.html")


app.run(port=8080, debug=True)
# app.liste(8080)
