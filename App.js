import React from 'react';
import ReactDOM from 'react-dom';

import Enter from './enter.js';
import Completed from './comp.js';

import './style.css';


const todo = () => {

  ReactDOM.render(<Enter />, document.getElementById('box'));

}

const comp = () => {

  ReactDOM.render(<Completed />, document.getElementById('box'));

}

function App() {
  return (
    <>
    <div id="container">
    <div id="main">
      <h3 className="title"><i>To-Do -app</i></h3>

      <button className="button" onClick={todo}>To-Do</button>

      <button className="button" onClick={comp}>Done</button>

    <hr />

    <div id="box">
      <Enter/>
    </div>

    </div>
    </div>


    </>
  );
}

export default App;
