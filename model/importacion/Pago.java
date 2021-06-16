/**
 * 
 */
package org.sieca.everis.pdcc.model.importacion;

/**
 * @author ytorregl
 *
 */
public class Pago {
	
	private String medioPago;
	private double otrosGastosTotal;
	private double valorTransaccionTotal;
	private double garantia;
	/**
	 * 
	 */
	public Pago() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param medioPago
	 * @param otrosGastosTotal
	 * @param valorTransaccionTotal
	 * @param garantia
	 */
	public Pago(String medioPago, double otrosGastosTotal, double valorTransaccionTotal, double garantia) {
		super();
		this.medioPago = medioPago;
		this.otrosGastosTotal = otrosGastosTotal;
		this.valorTransaccionTotal = valorTransaccionTotal;
		this.garantia = garantia;
	}
	/**
	 * @return the medioPago
	 */
	public String getMedioPago() {
		return medioPago;
	}
	/**
	 * @param medioPago the medioPago to set
	 */
	public void setMedioPago(String medioPago) {
		this.medioPago = medioPago;
	}
	/**
	 * @return the otrosGastosTotal
	 */
	public double getOtrosGastosTotal() {
		return otrosGastosTotal;
	}
	/**
	 * @param otrosGastosTotal the otrosGastosTotal to set
	 */
	public void setOtrosGastosTotal(double otrosGastosTotal) {
		this.otrosGastosTotal = otrosGastosTotal;
	}
	/**
	 * @return the valorTransaccionTotal
	 */
	public double getValorTransaccionTotal() {
		return valorTransaccionTotal;
	}
	/**
	 * @param valorTransaccionTotal the valorTransaccionTotal to set
	 */
	public void setValorTransaccionTotal(double valorTransaccionTotal) {
		this.valorTransaccionTotal = valorTransaccionTotal;
	}
	/**
	 * @return the garantia
	 */
	public double getGarantia() {
		return garantia;
	}
	/**
	 * @param garantia the garantia to set
	 */
	public void setGarantia(double garantia) {
		this.garantia = garantia;
	}
	
	
	

}
