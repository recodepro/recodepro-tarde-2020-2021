import React from 'react';
import { 
    createAppContainer, 
    createSwitchNavigator
} from 'react-navigation';

import Login from '../screens/Login';
import Tarefas from '../screens/Tarefas';

const Rotas = {
    Login: {
        nome: "Login",
        screen: Login
    },
    Tarefas: {
        nome: "Tarefas",
        screen: Tarefas
    }
}

// Criar as rotas
const Navegacao = createSwitchNavigator(Rotas);

// passar para o App
export default createAppContainer(Navegacao);