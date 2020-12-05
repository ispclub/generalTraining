(() => {
	document.addEventListener('DOMContentLoaded', () => {
		fetch('api.php', {
			method: 'GET',
			credentials: 'include'
		})
			.then(res => res.json())
			.then(data => {
				if(data.status === 1) {
					document.querySelector('.question h3').innerText = data.message
				}
			})
		const answerSlide = document.getElementById('answer')
		answerSlide.addEventListener('input', (e) => {
			document.querySelector('.number-answer').innerText = e.target.value
		})
		const buttonSubmit =  document.getElementById('submit')
		buttonSubmit.addEventListener('click', () => {
			fetch('api.php', {
				method: 'POST',
				body: `answer=${answerSlide.value}`,
				headers: {
				    'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8'
				}
			})
				.then(res => res.json())
				.then(data => {
					document.querySelector('.result-check span').innerText = data.message
				})
		})
	});
})()