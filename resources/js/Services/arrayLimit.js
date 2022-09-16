function arrayLimit(arr, limit) {
    return arr.filter(
        (product, index) => index < limit
    );
}
export default arrayLimit;
