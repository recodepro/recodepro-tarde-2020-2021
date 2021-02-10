import React from 'react';
import { 
  View, 
  Text, 
  StatusBar, 
} from 'react-native';

// import Tarefas from './src/screens/tarefas';
import Login from './src/screens/Login';

function App() {
  return (
    <View>
      <StatusBar />

      {/* <Tarefas /> */}
      <Login />
    </View>
  )
}

export default App;