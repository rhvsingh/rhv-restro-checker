const locChanger = document.getElementsByClassName('loc_changer');

for (let i = 0; i < locChanger.length; i++) {
    locChanger[i].onclick = function(e) {
        //console.log(e.target.getAttribute('data_loc_id'));
        $.ajax({
            type: "POST",
            url: 'assets/locSetter.php',
            data: {
                sessionSetterInit: 1,
                sessionLocSetter: e.target.getAttribute('data_loc_id')
            },
            success: function(data) {
                if (parseInt(data) == 1) {
                    /* window.location.reload(); */
                    location.replace('index.php');
                } else {
                    alert('Something went wrong');
                }
            }
        });
        //sessionStorage.setItem("user_location", e.target.getAttribute('data_loc_id'));
    }
}