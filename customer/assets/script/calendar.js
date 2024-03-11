// Function to display the selected date
function displaySelectedDate(dateElement, selectedDate) {
  dateElement.textContent = "Selected Date: " + selectedDate;
}

document.addEventListener("DOMContentLoaded", function () {
  // Get the pets dropdown menu
  const petsDropdown = document.getElementById("pets");

  // Add event listener to the pets dropdown menu
  petsDropdown.addEventListener("change", function () {
    console.log("Dropdown value changed");
    const numberOfPets = parseInt(this.value);
    const petFormsContainer = document.getElementById("petFormsContainer");

    // Clear any existing pet info forms
    petFormsContainer.innerHTML = "";

    // Dynamically create and append pet info forms based on the selected number of pets
    for (let i = 1; i <= numberOfPets; i++) {
      const petForm = document.createElement("div");
      petForm.innerHTML = `
                <div class="pet-info-form background-color-container" container bg-light mt-4 p-4">
                  <h2 class="mb-4">Pet ${i} Information Form</h2>
                  <form>
                    <div class="form-row">
                      <div class="form-group col-sm-2  background-color">
                        <label for="petname"><h5>Pet Name</h5></label>
                        <input
                          type="text"
                          class="form-control"
                          id="petname"
                          placeholder="Enter pet name"
                        />
                      </div>
                      <div class="form-group col-sm-2 background-color">
                        <label for="pettype"> <h5>Pet Type</h5></label>
                        <input
                          type="text"
                          class="form-control"
                          id="pettype"
                          placeholder="Enter pet type"
                        />
                      </div>
                      <div class="form-group col-sm-2 background-color">
                        <label for="sex"> <h5>Sex</h5></label>
                        <input
                          type="text"
                          class="form-control background-color"
                          id="sex"
                          placeholder="Enter sex"
                        />
                      </div>

                      <div class="form-group col-sm-2">
                        <label for="concerns"> <h5>Concerns</h5></label>
                        <textarea style="height: 200px;" class="form-concerns" id="concerns"></textarea>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-sm-2 background-color">
                        <label for="breed"> <h5>Breed</h5></label>
                        <input
                          type="text"
                          class="form-control"
                          id="breed"
                          placeholder="Enter breed"
                        />
                      </div>
                      <div class="form-group col-sm-2">
                        <label for="services"> <h5>Select Services</h5></label>
                        <select class="form-control" id="services">
                          <option value="">Choose...</option>
                          <option value="grooming">
                            Grooming<span class="price">PHP 1,000</span>
                          </option>
                          <option value="boarding">
                            Boarding<span class="price">PHP 1,500</span>
                          </option>
                          <option value="training">
                            Training<span class="price">PHP 2,000</span>
                          </option>
                        </select>
                      </div>

                      <div class="form-group col-sm-2">
                        <label for="vet"> <h5>Select vet</h5></label>
                        <select class="form-control" id="vet">
                          <option value="">Choose...</option>
                          <option value="vet1">Vet 1</option>
                          <option value="vet2">Vet 2</option>
                          <option value="vet3">Vet 3</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-sm-2 background-color">
                        <label for="birthdate"> <h5>BirthDate</h5></label>
                        <input type="date" class="form-control" id="birthdate" />
                      </div>
                    </div>

                    <div class="select-ex-pet">
                      <button
                        type="submit"
                        class="btn"
                        style="background-color: #6075d1; float: right;"
                      >
                        Select Existing Pet
                      </button>
                    </div>
                  </form>
                </div>
            `;
      petFormsContainer.appendChild(petForm);
    }
  });

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
      slotsText.textContent = "10 slots";
      slotsText.classList.add("slots-text");
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

  prevMonthBtn.addEventListener("click", () => {
    currentMonth--;
    if (currentMonth < 0) {
      currentMonth = 11;
      currentYear--;
    }
    generateCalendar(currentMonth, currentYear);
  });

  nextMonthBtn.addEventListener("click", () => {
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
      const selectedDateCell = document.querySelector(".calendar-cell.selected");
      if (selectedDateCell) {
        const selectedDate = new Date(currentYear, currentMonth, parseInt(selectedDateCell.textContent));
        const selectedTime = timeSlot.dataset.time; // Get the time from the data-time attribute
        openModal(selectedDate, selectedTime); // Call the openModal function
      } else {
        alert("Please select a date from the calendar first.");
      }
    });
  });

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
      "" +
      formattedDate +
      ", " +
      selectedTime;
      document.getElementById("selectedDate").value = formattedDate;
      document.getElementById("selectedTime").value = selectedTime;
  }

  // Function to format date in "Month Day, Year" format
  function formatDate(date) {
    const options = { month: "long", day: "numeric", year: "numeric" };
    return date.toLocaleDateString("en-US", options);
  }
});

// Get the modal
var modal = document.getElementById("registrationModal");

// Get the button that opens the modal
var btn = document.getElementById("registerBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];


// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
