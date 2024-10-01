function expand() {

    console.log('clicked');
    var sidebar = document.getElementById('sidebar');
    var content = document.querySelector('.dashboard-main');

    sidebar.classList.toggle('collapsed');

    if (sidebar.style.left === '-250px') {
        sidebar.style.left = '0';
        // content.style.marginLeft = '250px';
    } else {
        sidebar.style.left = '-250px';
        content.style.marginLeft = '0';
    }
};
