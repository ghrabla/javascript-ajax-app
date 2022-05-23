// Ajax Request for Showing Data----

var tbody = document.getElementById("tbody");

function showData() {
    tbody.innerHTML = "";
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "retrieve.php", true);
    xhr.responseType = "json";
    xhr.onload = () => {
        if (xhr.status === 200) {
            console.log(xhr.response);

            for (var i = 0; i < xhr.response.length; i++) {
                tbody.innerHTML += "<tr><td>" + xhr.response[i].id + "</td><td>" + xhr.response[i].name + "</td><td>" + xhr.response[i].email + "</td><td>" + xhr.response[i].pass + "</td><td><button class='btn btn-warning btn-sm btn-edit' data-sid=" + xhr.response[i].id + ">Edit</button> <button class='btn btn-danger btn-sm btn-del' data-sid=" + xhr.response[i].id + ">Delete</button></td></tr>";
            };

        } else {
            console.log("Problem Occured");
        }

        deleteData();
        editData();
    };

    xhr.send();

}
showData();

// Ajax Request for Insert or Update Data----

document.getElementById("btnAdd").addEventListener("click", (e) => {
    e.preventDefault();

    console.log("Event Fired");

    var name = document.getElementById("nameId").value;
    var eamil = document.getElementById("emailId").value;
    var pass = document.getElementById("passwordId").value;
    var id = document.getElementById("stuId").value;
    // creating xhr object

    const xhr = new XMLHttpRequest();

    xhr.open("POST", "insert.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");

    // Handling Request

    xhr.onload = () => {
        if (xhr.readyState === xhr.DONE) {
            if (xhr.status === 200) {
                document.getElementById("msg").innerHTML = "<div class='alert alert-dark mt-3'>" + xhr.responseText + "</div>";

                document.getElementById("myForm").reset();
                console.log(xhr.responseText);
                showData();
            } else {
                console.log("Problem Occured");
            }
        }
    }

    // Create object of form data

    const myData = new Object();
    myData.name = name;
    myData.email = eamil;
    myData.password = pass;
    myData.id = id;

    // Convert Js Object to JSON string

    const data = JSON.stringify(myData);
    console.log(data);

    // Sending data to server

    xhr.send(data);

});

// Ajax Request for Delete Data-----

function deleteData(){
    var del = document.getElementsByClassName("btn-del");
    // console.log(del);
    // console.log(del.length);

    for (let i = 0; i < del.length; ++i) {
        // console.log(del[i]);
        del[i].addEventListener("click", () => {
            var id = del[i].getAttribute("data-sid");
            console.log(id);
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "delete.php", true);
            xhr.setRequestHeader("Content-Type", "application/json");
            xhr.onload = ()=>{
                if(xhr.status === 200){
                    document.getElementById("msg").innerHTML = "<div class='alert alert-dark mt-3'>" + xhr.responseText + "</div>";
                    showData();
                }else{
                    console.log("Problem Occurred");
                }
            }
            const myData = new Object();
            myData.id = id;
        
            const data = JSON.stringify(myData);

            xhr.send(data);
        })
    }

}

// AJax Request for Edit Data---

function editData(){
    var edi = document.getElementsByClassName("btn-edit");
    console.log(edi);
    console.log(edi.length);
    var name = document.getElementById("nameId");
    var eamil = document.getElementById("emailId");
    var pass = document.getElementById("passwordId");
    var sid = document.getElementById("stuId");

    for (let i = 0; i < edi.length; ++i) {
        // console.log(del[i]);
        edi[i].addEventListener("click", () => {
            var id = edi[i].getAttribute("data-sid");
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "edit.php", true);
            xhr.responseType = "json";
            xhr.setRequestHeader("Content-Type", "application/json");
            xhr.onload = () => {
                if (xhr.status === 200) {
                    console.log(xhr.response);
                    name.value = xhr.response.name;
                    eamil.value = xhr.response.email;
                    pass.value = xhr.response.pass;
                    sid.value = xhr.response.id;
                } else {
                    console.log("Problem Occurred");
                }
            }
            const myData = new Object();
            myData.id = id;

            const data = JSON.stringify(myData);

            xhr.send(data);
        })
    }
}


