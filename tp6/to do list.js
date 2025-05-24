document.getElementById('task-form').addEventListener('submit', function(e) {
  e.preventDefault();
  
  const taskInput = document.getElementById('task-input');
  const taskText = taskInput.value.trim();

  if (taskText !== "") {
    addTask(taskText);
    taskInput.value = "";
  }
});

function addTask(text) {
  const li = document.createElement('li');
  li.textContent = text;

  const completeBtn = document.createElement('button');
  completeBtn.textContent = '✔';
  completeBtn.className = 'complete';
  completeBtn.onclick = function() {
    li.classList.toggle('completed');
  };

  const deleteBtn = document.createElement('button');
  deleteBtn.textContent = '✖';
  deleteBtn.onclick = function() {
    li.remove();
  };

  li.appendChild(completeBtn);
  li.appendChild(deleteBtn);
  
  document.getElementById('task-list').appendChild(li);
}
