export default class Helpers {
    static getRandom(min, max) {
        return Math.random() * (max - min) + min;
    }
}