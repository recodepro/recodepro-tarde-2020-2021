import React from 'react';
import { View, Text, ImageBackground, TextInput, TouchableOpacity } from 'react-native';

import Fundo from '../../../assets/fundo.jpg';

import styles from './styles';

function Login() {
    return (
        <View style={styles.caixa}>
            <ImageBackground source={Fundo} style={styles.fundo}>

                <View>
                    <Text style={styles.titulo}>Login</Text>
                </View>

                <View style={styles.inputs}>

                    <TextInput placeholder="Digite o email..." style={styles.input}/>
                    <TextInput placeholder="Digite o senha..." style={styles.input} secureTextEntry={true}/>

                    <TouchableOpacity style={styles.btn}>
                        <Text style={styles.texto}>Entrar</Text>
                    </TouchableOpacity>

                </View>
                
            </ImageBackground>

        </View>
    )
}


export default Login;