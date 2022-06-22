/*
    设置cookie
    + @param {string} name 表示cookie名称
    + @param {string} value 表示cookie值
    + @param {number} time 表示cookie过期时间
*/
function setCookie(name, value, time) {
    //判断有没有设置过期时间
    if (time) {
        let d = new Date()
        d.setDate(d.getDate() + time)
        let t = d.toUTCString()
        document.cookie = `${name}=${value}; expires=${t}; path=/`
    } else {
        document.cookie = `${name}=${value}; path=/`
    }
}
/*
   删除cookie
   + @param {string} name 表示删除cookie的名称
*/
function delCookie(name) {
    setCookie(name, 1, -1)
}

/*
    获取cookie
    + @param {string} name 表示要获取cookie名称
*/
function getCookie(name) {
    let arr = document.cookie.split('; ')
    let obj = {}
    arr.forEach(item => {
        let newArr = item.split('=')
        obj[newArr[0]] = newArr[1]
    })
    return obj[name]
}