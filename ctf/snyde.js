const CryptoJS = require('crypto-js')
const { encode } = require('./ascii.js')
const randomstring = require('randomstring')
const flag = require('./flag.js')
(() => {
	let pass = '?????????????' // input here
	const key_check = '©×ïûÐ»ĐĭĥĤŁĕğ'
	const user = 'administrator'
	if((user.charCodeAt(i) + pass.charCodeAt(i) + i * 10) === key_check.charCodeAt(i)) {
		console.log(encode(CryptoJS.AES.encrypt(flag, pass).toString()))
	} else {
		console.log(encode(CryptoJS.AES.encrypt(randomstring.generate(37), pass).toString()))
	}
	// <~<AI$bA4K[9=>;=-2L'(*=u%sPAhRqDCe?TBECaY41O:].D(eS/A1qRf<&Jf#<-)k8=]7plCb\Om1f>uJ2g97[0/[Q5;Iq\-6o&IQ1/^k^G>ULd~>
})()