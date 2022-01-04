function addElement() {
    console.log('In addElement');
    const newDiv = document.createElement('div');
    const newContent = document.createTextNode("Hi there, and greetings");
    newDiv.appendChild(newContent);
    const currentDiv = document.getElementById('div1');
    document.body.insertBefore(newDiv, currentDiv);
}