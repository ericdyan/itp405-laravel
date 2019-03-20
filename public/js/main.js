// Create connectiom to WebSocket
//
let connection = new WebSocket('wss://websockets-lab4.herokuapp.com');

connection.onopen = () => {
  console.log('connected from the front end');
};

connection.onerror = () => {
  console.log('failed to connect from the front end');
};

connection.onmessage = (event) => {
  console.log('received message', event.data);
  document.getElementById('doc').innerHTML = event.data;
  const range = window.getSelection();
  let div = document.getElementById('doc');
  range.selectAllChildren(div);
  range.collapseToEnd();
};

document.getElementById('doc').addEventListener('keyup', (event) => {
  event.preventDefault();
  console.log('hi');

  let message = document.getElementById('doc').innerHTML;
  connection.send(message);
  console.log(message);
});
