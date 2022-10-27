// ------ data ------ //
const productList = [
	{
		id: 1,
		name: "不收邊反車線寬鬆大學-淺灰",
		price: 380.00,
		productImg:
            "https://photo.stylemooncat.com.tw/photo/01011419/01011419.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80",
		wearingImg:
            "https://photo.stylemooncat.com.tw/photo/01011419/01011419-007-06.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
	},
	{
		id: 2,
		name: "He小字母短版大學T-杏色",
		price: 430.00,
		productImg:
            "https://photo.stylemooncat.com.tw/photo/01011418/01011418.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=658&q=80",
		wearingImg:
            "https://photo.stylemooncat.com.tw/photo/01011418/01011418-011-01.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=658&q=80"
	},
	{
		id: 3,
		name: "下抽繩防風連帽外套-黑",
		price: 580.00,
		productImg:
            "https://photo.stylemooncat.com.tw/photo/04130065/04130065.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80",
		wearingImg:
            "https://photo.stylemooncat.com.tw/photo/04130065/04130065-001-11.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80"
	},
	{
		id: 4,
		name: "V領厚棉開衩背心-灰",
		price: 520.0,
		productImg:
            "https://photo.stylemooncat.com.tw/photo/01030496/01030496-006-01.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80",
		wearingImg:
            "https://photo.stylemooncat.com.tw/photo/01030496/01030496-006-10.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80"
	},
	{
		id: 5,
		name: "腰鬆緊細褶長裙-黑",
		price: 450.0,
		productImg:
            "https://photo.stylemooncat.com.tw/photo/06030140/06030140-001-02.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1400&q=80",
		wearingImg:
			"https://photo.stylemooncat.com.tw/photo/06030140/06030140-001-04.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=728&q=80"
	},
	{
		id: 6,
		name: "圓領羅紋毛衣背心-藍",
		price: 380.00,
		productImg:
			"https://photo.stylemooncat.com.tw/photo/01030495/01030495.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80",
		wearingImg:
			"https://photo.stylemooncat.com.tw/photo/01030495/01030495-058-01.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"
	},
	{
		id: 7,
		name: "圓領羅紋毛衣背心-卡其杏",
		price: 380.00,
		productImg:
			"https://photo.stylemooncat.com.tw/photo/01030495/01030495-085-01.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80",
		wearingImg:
			"https://photo.stylemooncat.com.tw/photo/01030495/01030495-085-08.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=700&q=80"
	},
	{
		id: 8,
		name: "細絨棉感五分短褲-卡其",
		price: 380.00,
		productImg:
			"https://photo.stylemooncat.com.tw/photo/05110037/05110037-017-01.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80",
		wearingImg:
			"https://photo.stylemooncat.com.tw/photo/05110037/05110037-017-11.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
	},
	{
		id: 9,
		name: "後綁帶細肩蛋糕長洋-藍",
		price: 680.00,
		productImg:
			"https://photo.stylemooncat.com.tw/photo/03010122/03010122-058-05.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=658&q=80",
		wearingImg:
			"https://photo.stylemooncat.com.tw/photo/03010122/03010122-058-02.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=658&q=80"
	},
	{
		id: 10,
		name: "滾邊條紋連身裙-白",
		price: 580.00,
		productImg:
			"https://photo.stylemooncat.com.tw/photo/03040079/03040079-002-09.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80",
		wearingImg:
			"https://photo.stylemooncat.com.tw/photo/03040079/03040079-002-10.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80"
	},
	{
		id: 11,
		name: "U領涼感短版BraTop背心-黑",
		price: 250.00,
		productImg:
			"https://photo.stylemooncat.com.tw/photo/02050042/02050042-001-01.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80",
		wearingImg:
			"https://photo.stylemooncat.com.tw/photo/02050042/02050042-001-05.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80"
	},
	{
		id: 12,
		name: "捲邊短版針織上衣-紫",
		price: 430.00,
		productImg:
			"https://photo.stylemooncat.com.tw/photo/01080734/01080734-066-01.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1400&q=80",
		wearingImg:
			"https://photo.stylemooncat.com.tw/photo/01080734/01080734-066-08.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=728&q=80"
	},
	{
		id: 13,
		name: "棉麻防曬長版襯衫-白",
		price: 380.00,
		productImg:
			"https://photo.stylemooncat.com.tw/photo/04010047/04010047-002-01.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80",
		wearingImg:
			"https://photo.stylemooncat.com.tw/photo/04010047/04010047-002-10.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"
	},
	{
		id: 14,
		name: "下抽鬚牛仔寬褲",
		price: 680.00,
		productImg:
			"https://photo.stylemooncat.com.tw/photo/05010229/05010229-058-10.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80",
		wearingImg:
			"https://photo.stylemooncat.com.tw/photo/05010229/05010229-058-12.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=700&q=80"
	},
	{
		id: 15,
		name: "光澤質感傘襬長裙-淺杏",
		price: 480.00,
		productImg:
			"https://photo.stylemooncat.com.tw/photo/06030131/06030131-125-07.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80",
		wearingImg:
			"https://photo.stylemooncat.com.tw/photo/06030131/06030131-125-11.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
	},
	{
		id: 16,
		name: "後開衩單釦西裝外套-杏",
		price: 680.00,
		productImg:
			"https://photo.stylemooncat.com.tw/photo/04060093/04060093-011-03.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=658&q=80",
		wearingImg:
			"https://photo.stylemooncat.com.tw/photo/04060093/04060093-011-10.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=658&q=80"
	},
	{
		id: 17,
		name: "反車線五分袖上衣-黑",
		price: 430.00,
		productImg:
			"https://photo.stylemooncat.com.tw/photo/01011414/01011414-001-02.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80",
		wearingImg:
			"https://photo.stylemooncat.com.tw/photo/01011414/01011414-001-07.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80"
	},
	{
		id: 18,
		name: "反車線五分袖上衣-白",
		price: 430.00,
		productImg:
			"https://photo.stylemooncat.com.tw/photo/01011414/01011414-002-04.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80",
		wearingImg:
			"https://photo.stylemooncat.com.tw/photo/01011414/01011414-002-09.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80"
	},
    {
		id: 19,
		name: "反車線五分袖上衣-藍",
		price: 430.00,
		productImg:
			"https://photo.stylemooncat.com.tw/photo/01011414/01011414-058-04.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80",
		wearingImg:
			"https://photo.stylemooncat.com.tw/photo/01011414/01011414-058-09.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80"
	},
    {
		id: 20,
		name: "前後印字大寬T-深藍",
		price: 380.00,
		productImg:
			"https://photo.stylemooncat.com.tw/photo/01011387/01011387-059-01.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80",
		wearingImg:
			"https://photo.stylemooncat.com.tw/photo/01011387/01011387-059-02.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80"
	}
];

// ----- functions STAR ----- //
//-------price=>NTD----------//
function renderProductList(products) {
	let rawHTML = '';
	const productPanel = document.querySelector("#product-list");

	products.forEach((product) => {
		rawHTML += `
      <div class="product-wrapper" data-productID="${product.id}">
        <div class="picture-wrapper">
          <img class="product-img picture-product-look"
            src="${product.productImg}"
            alt="product-photo">
          <img class="product-img picture-wearing-look"
            src="${product.wearingImg}"
            alt="model-photo">
        </div>
        <div class="add-favorite">
          <i class="fas fa-heart"></i>
        </div>
        <div class="product-info">
          <p class="product-description">${product.name}</p>
          <p class="product-price">${product.price} NTD</p>
        </div>
      </div>
    `;
	});
	productPanel.innerHTML = rawHTML;
}

renderProductList(productList);
