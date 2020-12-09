window.addEventListener("load", initSite)
document.getElementById("save").addEventListener("click", setName)
document.getElementById("update").addEventListener("click", getName)
/* document.getElementById("clear").addEventListener("click", clearName) */

function initSite() {
	
}
function setName() {
	
}
async function getName() {
	const collectedName = await makeRequest("./server/requestHandler.php", "GET")
	console.log(collectedName)
}
async function makeRequest(path, method, body) {
	try {
	const response = await fetch(path, {
		method,
		body
		})
	console.log(response)
	return response.json()
	} catch(err) {
		console.log(err)
	}
}