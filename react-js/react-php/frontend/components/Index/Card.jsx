const Card = () => {
    const [student, setStudent] = React.useState([]);
    const [render, setRender] = React.useState(false);
    const [msg, setMsg] = React.useState(false);

    React.useEffect(async () => {
        const url = "http://localhost/react-php/backend";
        const response = await fetch(url);
        setStudent(await response.json());
    }, [render]);

    async function registerStudent(event) {
        event.preventDefault();

        let formData = new FormData(event.target);

        const url = "http://localhost/react-php/backend/register-student.php";

        fetch(url, {
            method: "POST",
            body: formData
        }).then((response) => response.json()).then((dados) => {
            setRender(!render);
            setMsg(dados);

            setTimeout(() => {
                setMsg(false)
            }, 3000);
        });
    }

    return (
        <div className="container py-5">
            <div className="card w-75 mx-auto border-0">
                <form onSubmit={registerStudent}>
                    <input className="form-control mt-2" type="text" name="name" placeholder="Nome" />
                    <input className="form-control mt-2" type="text" name="telphone" placeholder="Telefone" />
                    <button className="btn btn-info w-100 mt-2">Cadastrar estudante</button>
                </form>
            </div>

            { 
                msg && <div className="alert alert-success mx-auto mt-4 w-75" role="alert">
                    Cadastro efetuado com sucesso!
                </div>
            }

            {student.map((element) => {
                return (
                    <div key={element.id} className="card w-75 mx-auto mt-4">
                        <div className="card-header">
                            {element.name}
                        </div>
                        <div className="card-body">
                            Telefone: {element.telphone}
                        </div>
                    </div>
                );
            })}
        </div>
    );
}