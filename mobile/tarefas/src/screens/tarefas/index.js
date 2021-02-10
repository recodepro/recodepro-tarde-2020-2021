import React from 'react';
import { View, Text } from 'react-native';

const tarefas = [
    {
        nome: "Compras"
    },
    {
        nome: "Lavar louça"
    }
]

function Tarefas() {
    return (
        <View>

            {
                tarefas.map((tarefa, index) => 
                    <Text key={index}>{tarefa.nome}</Text>
                )
            }

        </View>
    )
}

export default Tarefas;