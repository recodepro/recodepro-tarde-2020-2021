import React from 'react';
import { 
  View, 
  Text, 
  StatusBar, 
} from 'react-native';


import Routes from './src/routes';

// import Tarefas from './src/screens/tarefas';
// import Login from './src/screens/Login';

function App() {
  return (
    <View>
      <StatusBar />

      <Routes />
    </View>
  )
}

export default App;