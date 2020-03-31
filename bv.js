table = 'fZodR9XQDSUm21yCkr6zBqiveYah8bt4xsWpHnJE7jL5VG3guMTKNPAwcF';
tr = {};
for (var i = 0; i < 58; i++) {
    tr[table[i]] = i;
    s = [11, 10, 3, 8, 4, 6];
    xor = 177451812;
    add = 8728348608;
}
function dec(x) {
    r = 0;
    for (var i = 0; i < 6; i++) {
        r += tr[x[s[i]]] * Math.pow(58, i);
    }
    return (r - add) ^ xor;
}
function enc(x) {
    x = (x ^ xor) + add;
    r = ['B', 'V', '1', ' ', ' ', '4', ' ', '1', ' ', '7', ' ', ' '];
    for (var i = 0; i < 6; i++) {
        r[s[i]] = table[Math.floor(x / (Math.pow(58, i))) % 58];
    }
    return r.join('');
}
console.log(dec('BV1zs411S7sz'));
console.log(enc(2129461));
