import './App.css'
import Layout from './Layout'
import '@fontsource/roboto/300.css';
import '@fontsource/roboto/400.css';
import '@fontsource/roboto/500.css';
import '@fontsource/roboto/700.css';
import { Provider } from 'react-redux';
import countStore from './store';

function App() {
  return (
    <>
    <Provider store={countStore}>
     <Layout/>
    </Provider>
    </>
  )
}

export default App
