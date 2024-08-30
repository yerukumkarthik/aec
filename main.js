const DateOfDuty = document.getElementById("duty").value;
const DateOfRelieving = document.getElementById("relieving").value;

function getdetails()
{
    const collegename = document.getElementById("college").value;
    const  desig = document.getElementById("designation").value;
    const name = document.getElementById("faculty").value;
    const purpose = document.getElementById("purpose").value;
    const telephone = document.getElementById("phone").value;
    const NoOfStudents = document.getElementById("nostudents").value;
    const DateOfDuty = document.getElementById("duty").value;
    const DateOfRelieving = document.getElementById("relieving").value;
    var rem =0
    var des = {"asc":150,"pro":200,"assist":100};
    var collnames={"prag":100,"bvc":100,"vishnu":100,"srkr":100,"kl":150};
    var purp={"paper": 20,"viva":100,"lab":20};
    const start = new Date(DateOfDuty);
    const end = new Date(DateOfRelieving);
    const differenceInMilliseconds = Math.abs(end - start);
    const millisecondsInADay = 1000 * 60 * 60 * 24;
    const days = Math.round(differenceInMilliseconds / millisecondsInADay);
    const cost= des[desig]+collnames[collegename]+purp[purpose]*NoOfStudents;
    const details= "No of days: "+days+"\nNo of Students: "+NoOfStudents+"\nTotalAmount: "+cost;
    window.alert(details);
}
