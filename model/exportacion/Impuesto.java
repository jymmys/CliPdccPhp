/**
 * 
 */
package org.sieca.everis.pdcc.model.exportacion;

/**
 * @author ytorregl
 *
 */
public class Impuesto {
	
	private String tipoImpuesto;
	private String regimenImpuesto;
	private String montoCalculado;
	private double montoPagar;
	private double multaPagar;
	private double otrosCargos;
	/**
	 * 
	 */
	public Impuesto() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param tipoImpuesto
	 * @param regimenImpuesto
	 * @param montoCalculado
	 * @param montoPagar
	 * @param multaPagar
	 * @param otrosCargos
	 */
	public Impuesto(String tipoImpuesto, String regimenImpuesto, String montoCalculado, double montoPagar,
			double multaPagar, double otrosCargos) {
		super();
		this.tipoImpuesto = tipoImpuesto;
		this.regimenImpuesto = regimenImpuesto;
		this.montoCalculado = montoCalculado;
		this.montoPagar = montoPagar;
		this.multaPagar = multaPagar;
		this.otrosCargos = otrosCargos;
	}
	/**
	 * @return the tipoImpuesto
	 */
	public String getTipoImpuesto() {
		return tipoImpuesto;
	}
	/**
	 * @param tipoImpuesto the tipoImpuesto to set
	 */
	public void setTipoImpuesto(String tipoImpuesto) {
		this.tipoImpuesto = tipoImpuesto;
	}
	/**
	 * @return the regimenImpuesto
	 */
	public String getRegimenImpuesto() {
		return regimenImpuesto;
	}
	/**
	 * @param regimenImpuesto the regimenImpuesto to set
	 */
	public void setRegimenImpuesto(String regimenImpuesto) {
		this.regimenImpuesto = regimenImpuesto;
	}
	/**
	 * @return the montoCalculado
	 */
	public String getMontoCalculado() {
		return montoCalculado;
	}
	/**
	 * @param montoCalculado the montoCalculado to set
	 */
	public void setMontoCalculado(String montoCalculado) {
		this.montoCalculado = montoCalculado;
	}
	/**
	 * @return the montoPagar
	 */
	public double getMontoPagar() {
		return montoPagar;
	}
	/**
	 * @param montoPagar the montoPagar to set
	 */
	public void setMontoPagar(double montoPagar) {
		this.montoPagar = montoPagar;
	}
	/**
	 * @return the multaPagar
	 */
	public double getMultaPagar() {
		return multaPagar;
	}
	/**
	 * @param multaPagar the multaPagar to set
	 */
	public void setMultaPagar(double multaPagar) {
		this.multaPagar = multaPagar;
	}
	/**
	 * @return the otrosCargos
	 */
	public double getOtrosCargos() {
		return otrosCargos;
	}
	/**
	 * @param otrosCargos the otrosCargos to set
	 */
	public void setOtrosCargos(double otrosCargos) {
		this.otrosCargos = otrosCargos;
	}

	


}
