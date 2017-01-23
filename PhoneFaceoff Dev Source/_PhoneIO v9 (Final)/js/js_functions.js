/**
 * Stores general javascript functions used in all other JS files.
 * Only one function: extend function (simulates inheritance for JS prototypes).
 * The extend function assigns the parent classes's methods to the child class and
 * assigns the child class constructor to itself
 * 
 * @author Philip Scott
 * @date 2016-05-19
 * @param		ChildClass		the subclass
 *				ParentClass		the super class
 */

function extend(ChildClass, ParentClass) {
	ChildClass.prototype = new ParentClass();
	ChildClass.prototype.constructor = ChildClass;
}