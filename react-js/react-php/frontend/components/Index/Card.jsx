const Card = () => {
    const [student, setStudent] = React.useState([])

    React.useEffect(async () => {
        const url = "http://localhost/react-php/backend";
        const response = await fetch(url);
        setStudent(await response.json());
    }, [])

    return (
        <div className="container py-5">
            {student.map((element) => {
                return (
                    <div key={element.id} className="card w-50 mx-auto mt-3">
                        <div className="card-header">
                            {element.name}
                        </div>
                        <div className="card-body">
                            Telefone: {element.telphone}
                        </div>
                    </div>
                )
            })}
        </div>
    );
}