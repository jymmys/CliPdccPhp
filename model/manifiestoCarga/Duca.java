/**
 * 
 */
package org.sieca.everis.pdcc.model.manifiestoCarga;

/**
 * @author ytorregl
 *
 */
public class Duca {
	
	private String codigoPaisExpedicion;
	private String codigoPaisDestino;
	private double pesoBrutoTotal;
	private String numeroDuca;
	/**
	 * 
	 */
	public Duca() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param codigoPaisExpedicion
	 * @param codigoPaisDestino
	 * @param pesoBrutoTotal
	 * @param numeroDuca
	 */
	public Duca(String codigoPaisExpedicion, String codigoPaisDestino, double pesoBrutoTotal, String numeroDuca) {
		super();
		this.codigoPaisExpedicion = codigoPaisExpedicion;
		this.codigoPaisDestino = codigoPaisDestino;
		this.pesoBrutoTotal = pesoBrutoTotal;
		this.numeroDuca = numeroDuca;
	}
	/**
	 * @return the codigoPaisExpedicion
	 */
	public String getCodigoPaisExpedicion() {
		return codigoPaisExpedicion;
	}
	/**
	 * @param codigoPaisExpedicion the codigoPaisExpedicion to set
	 */
	public void setCodigoPaisExpedicion(String codigoPaisExpedicion) {
		this.codigoPaisExpedicion = codigoPaisExpedicion;
	}
	/**
	 * @return the codigoPaisDestino
	 */
	public String getCodigoPaisDestino() {
		return codigoPaisDestino;
	}
	/**
	 * @param codigoPaisDestino the codigoPaisDestino to set
	 */
	public void setCodigoPaisDestino(String codigoPaisDestino) {
		this.codigoPaisDestino = codigoPaisDestino;
	}
	/**
	 * @return the pesoBrutoTotal
	 */
	public double getPesoBrutoTotal() {
		return pesoBrutoTotal;
	}
	/**
	 * @param pesoBrutoTotal the pesoBrutoTotal to set
	 */
	public void setPesoBrutoTotal(double pesoBrutoTotal) {
		this.pesoBrutoTotal = pesoBrutoTotal;
	}
	/**
	 * @return the numeroDuca
	 */
	public String getNumeroDuca() {
		return numeroDuca;
	}
	/**
	 * @param numeroDuca the numeroDuca to set
	 */
	public void setNumeroDuca(String numeroDuca) {
		this.numeroDuca = numeroDuca;
	}
	
	

}
