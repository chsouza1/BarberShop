document.getElementById('scheduleForm').onsubmit = function(event) {
    event.preventDefault();
    var name = document.getElementById('name').value;
    var date = document.getElementById('date').value;
    var time = document.getElementById('time').value;
    alert('Agendado para ' + name + ' no dia ' + date + ' às ' + time);
};
