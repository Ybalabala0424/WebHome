const Koa = require('koa')
const app = new Koa()
const router = require('koa-router')()
const rp = require('request-promise')
const cors = require('koa-cors')

app.use(cors());
async function getRequest(name) {
    const name1 = decodeURI(name)
    const url = "http://v.juhe.cn/weather/index?cityname=" + name + "&dtype=&format=&key=15448dc543b57c3eb503a23803f3eb6d"
    console.log(url);
    let result = JSON.parse(await rp(url))
    return result
}

const report = async (ctx) => {
    let geturl = ctx.originalUrl
    // console.log(geturl);
    let array = geturl.split('=')
    let name = array[1]
    // console.log(name);
    let result = await getRequest(name)
    ctx.body = result
}
app.use(router['routes']()).use(router.allowedMethods())
router.get('/report', report)
module.exports = router
app.listen(3000)
console.log("server start!")
