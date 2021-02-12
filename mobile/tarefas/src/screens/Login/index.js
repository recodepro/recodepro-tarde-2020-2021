import React from 'react';
import { View, Text, ImageBackground, TextInput, TouchableOpacity, Alert, Platform } from 'react-native';

import Fundo from '../../../assets/fundo.jpg';

import styles from './styles';

const apiUsuario = {
    id: 1,
    email: "jose@teste.com",
    senha: "123"
}

function Login({navigation}) {

    function autenticacao() {
        // fetch("")
        if (apiUsuario.email === usuario && apiUsuario.senha === senha) {
            navigation.navigate("Tarefas");
        }else {
            Alert.alert("Usuario inválido", "É necessário informar um usuário válido.")
        }
        // if (Platform.OS === "web") {
        //     alert("foi")
        // }else {
        //     Alert.alert(Platform.OS)
        // }
    }

    const [usuario, setUsuario] = React.useState("");
    const [senha, setSenha] = React.useState("");

    return (
        <View style={styles.caixa}>
            <ImageBackground source={Fundo} style={styles.fundo}>

                <View>
                    <Text style={styles.titulo}>Login</Text>
                </View>

                <View style={styles.inputs}>

                    <TextInput 
                        placeholder="Digite o email..." 
                        style={styles.input}
                        value={usuario}
                        onChangeText={(text) => setUsuario(text)}
                    />

                    <TextInput 
                        placeholder="Digite o senha..." 
                        style={styles.input} 
                        secureTextEntry={true}
                        value={senha}
                        onChangeText={(text) => setSenha(text)}
                    />

                    <TouchableOpacity style={styles.btn} onPress={autenticacao}>
                        <Text style={styles.texto}>Entrar</Text>
                    </TouchableOpacity>

                </View>
                
            </ImageBackground>

        </View>
    )
}


export default Login;