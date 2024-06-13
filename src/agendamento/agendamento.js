document.getElementById('scheduleForm').onsubmit = function(event) {
    event.preventDefault();
    var date = document.getElementById('date').value;
    var time = document.getElementById('time').value;
    alert('Agendado para ' + date + ' às ' + time);

    function redirectToAgendamento() {
        window.location.href = "src/agendamento/agendamento.html";
    }
};