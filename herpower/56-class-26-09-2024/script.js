const mycars = {
    car1: "BMW",
    car2: "ford",
    car3: "fiat",
    carrun: function () {
        return ("the car is runnig");
    }
};
// delete mycars.carrun;

document.write(Object.keys(mycars));
document.write(Object.values(mycars));
// document.write(JSON.stringify(mycars));