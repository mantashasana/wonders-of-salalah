function updateDateTime() {
  const now = new Date();
  const date = now.toLocaleDateString();
  const time = now.toLocaleTimeString([], {
    hour: "2-digit",
    minute: "2-digit",
  });

  document.getElementById("date").textContent = date;
  document.getElementById("time").textContent = time;
}

setInterval(updateDateTime, 1000);
updateDateTime();
