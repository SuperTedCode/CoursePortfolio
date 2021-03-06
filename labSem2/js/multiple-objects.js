function Hotel (name, rooms, booked) {
	this.name = name;
	this.rooms = rooms;
	this.booked = booked;
	this.checkAvailability = function() {
		return this.rooms - this.booked;
	};
}

var quayHotel = new Hotel("Quay", 40, 25);
var parkHotel = new Hotel("Park", 120, 77);

document.getElementById("hotel1").textContent = quayHotel.name + " Rooms: " + quayHotel.checkAvailability();
document.getElementById("hotel2").textContent = parkHotel.name + " Rooms: " + parkHotel.checkAvailability();