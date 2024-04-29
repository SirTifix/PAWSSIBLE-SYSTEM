$(document).ready(function(){
    $("#openCalendarModalBtn").click(function(){
        $("#calendarModal").modal('show');
    });
});

// Function to display the selected date
function displaySelectedDate(dateElement, selectedDate) {
  dateElement.textContent = "Selected Date: " + selectedDate;
}


const prevMonthBtn = document.getElementById("prevMonthBtn");
const nextMonthBtn = document.getElementById("nextMonthBtn");
const currentMonthYear = document.getElementById("currentMonthYear");
const calendarBody = document.getElementById("calendarBody");

let currentDate = new Date();
let currentMonth = currentDate.getMonth();
let currentYear = currentDate.getFullYear();

function generateCalendar(month, year) {
  currentMonthYear.textContent = `${getMonthName(month)} ${year}`;
  calendarBody.innerHTML = "";

  const firstDayOfMonth = new Date(year, month, 1).getDay();
  const daysInMonth = new Date(year, month + 1, 0).getDate();

  for (let i = 0; i < firstDayOfMonth; i++) {
    const emptyCell = document.createElement("div");
    emptyCell.classList.add("calendar-cell");
    calendarBody.appendChild(emptyCell);
  }

  for (let i = 1; i <= daysInMonth; i++) {
    const calendarCell = document.createElement("div");
    calendarCell.classList.add("calendar-cell");
    calendarCell.textContent = i;

    calendarCell.addEventListener("click", () => {
      const selectedDate = new Date(year, month, i);
      const formattedDate = formatDate(selectedDate); // Format the selected date
      alert(`You clicked on ${formattedDate}`);
    });

    // Create and append the "10 slots" text below each calendar cell
    const slotsText = document.createElement("div");
    // slotsText.textContent = "10 slots";
    // slotsText.classList.add("slots-text");
    calendarCell.appendChild(slotsText);

    calendarBody.appendChild(calendarCell);
  }
}

function getMonthName(month) {
  const months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];
  return months[month];
}

prevMonthBtn.addEventListener("click", (event) => {
  event.preventDefault();
  currentMonth--;
  if (currentMonth < 0) {
    currentMonth = 11;
    currentYear--;
  }
  generateCalendar(currentMonth, currentYear);
});

nextMonthBtn.addEventListener("click", (event) => {
  event.preventDefault();
  currentMonth++;
  if (currentMonth > 11) {
    currentMonth = 0;
    currentYear++;
  }
  generateCalendar(currentMonth, currentYear);
});

generateCalendar(currentMonth, currentYear);

const timeSlots = document.querySelectorAll(".time-slot");

timeSlots.forEach((timeSlot) => {
  timeSlot.addEventListener("click", () => {
    const selectedDateCell = document.querySelector(
      ".calendar-cell.selected"
    );
    if (selectedDateCell) {
      const selectedDate = new Date(
        currentYear,
        currentMonth,
        parseInt(selectedDateCell.textContent)
      );
      const selectedTime = timeSlot.dataset.time; // Get the time from the data-time attribute
      openModal(selectedDate, selectedTime); // Call the openModal function
    } else {
      alert("Please select a date from the calendar first.");
    }
  });
});

  // Function to format date in "Month Day, Year" format
  function formatDate(date) {
    const options = { month: "long", day: "numeric", year: "numeric" };
    return date.toLocaleDateString("en-US", options);
  }


calendarBody.addEventListener("click", (event) => {
  const selectedDate = document.querySelector(".calendar-cell.selected");
  if (selectedDate) {
    selectedDate.classList.remove("selected");
  }
  if (event.target.classList.contains("calendar-cell")) {
    event.target.classList.add("selected");
  }
});

function openModal(selectedDate, selectedTime) {
  const formattedDate = formatDate(selectedDate); // Format the selected date
  document.getElementById("selectedDateTime").textContent =
    "" + formattedDate + ", " + selectedTime;
}

console.log(formattedDate + selectTime)

$(document).ready(function(){
    // Show confirmation modal when a time slot is clicked
    $(".time-slot").click(function() {
        // Store the selected time
        var selectedTime = $(this).data("time");
        // Show the confirmation modal
        $("#confirmselectdt").modal('show');
        
        // Handle confirmation
        $("#confirmSelectionBtn").click(function() {
            // Perform action upon confirmation (e.g., submit form, etc.)

            // Hide the confirmation modal
            $("#confirmselectdt").modal('hide');
        });
    });
});



