/**
 * 
 */
package org.sieca.everis.pdcc.model.exportacion;

/**
 * @author ytorregl
 *
 */
public class Factura {
	
	private String numero;
	private String fechaEmision;
	private String suplidor;
	private String relacionSuplidor;
	private String moneda;
	private double valorOriginal;
	private double tasaCambio;
	private double valor;
	/**
	 * 
	 */
	public Factura() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param numero
	 * @param fechaEmision
	 * @param suplidor
	 * @param relacionSuplidor
	 * @param moneda
	 * @param valorOriginal
	 * @param tasaCambio
	 * @param valor
	 */
	public Factura(String numero, String fechaEmision, String suplidor, String relacionSuplidor, String moneda,
			double valorOriginal, double tasaCambio, double valor) {
		super();
		this.numero = numero;
		this.fechaEmision = fechaEmision;
		this.suplidor = suplidor;
		this.relacionSuplidor = relacionSuplidor;
		this.moneda = moneda;
		this.valorOriginal = valorOriginal;
		this.tasaCambio = tasaCambio;
		this.valor = valor;
	}
	/**
	 * @return the numero
	 */
	public String getNumero() {
		return numero;
	}
	/**
	 * @param numero the numero to set
	 */
	public void setNumero(String numero) {
		this.numero = numero;
	}
	/**
	 * @return the fechaEmision
	 */
	public String getFechaEmision() {
		return fechaEmision;
	}
	/**
	 * @param fechaEmision the fechaEmision to set
	 */
	public void setFechaEmision(String fechaEmision) {
		this.fechaEmision = fechaEmision;
	}
	/**
	 * @return the suplidor
	 */
	public String getSuplidor() {
		return suplidor;
	}
	/**
	 * @param suplidor the suplidor to set
	 */
	public void setSuplidor(String suplidor) {
		this.suplidor = suplidor;
	}
	/**
	 * @return the relacionSuplidor
	 */
	public String getRelacionSuplidor() {
		return relacionSuplidor;
	}
	/**
	 * @param relacionSuplidor the relacionSuplidor to set
	 */
	public void setRelacionSuplidor(String relacionSuplidor) {
		this.relacionSuplidor = relacionSuplidor;
	}
	/**
	 * @return the moneda
	 */
	public String getMoneda() {
		return moneda;
	}
	/**
	 * @param moneda the moneda to set
	 */
	public void setMoneda(String moneda) {
		this.moneda = moneda;
	}
	/**
	 * @return the valorOriginal
	 */
	public double getValorOriginal() {
		return valorOriginal;
	}
	/**
	 * @param valorOriginal the valorOriginal to set
	 */
	public void setValorOriginal(double valorOriginal) {
		this.valorOriginal = valorOriginal;
	}
	/**
	 * @return the tasaCambio
	 */
	public double getTasaCambio() {
		return tasaCambio;
	}
	/**
	 * @param tasaCambio the tasaCambio to set
	 */
	public void setTasaCambio(double tasaCambio) {
		this.tasaCambio = tasaCambio;
	}
	/**
	 * @return the valor
	 */
	public double getValor() {
		return valor;
	}
	/**
	 * @param valor the valor to set
	 */
	public void setValor(double valor) {
		this.valor = valor;
	}

	
	

	
	

}
