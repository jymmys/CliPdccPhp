/**
 * 
 */
package org.sieca.everis.pdcc.model.afpa;

/**
 * @author lmoremos
 *
 */
public class Garantia {

	
	private String claseGarantia;
	private Double monto;
	private String numeroGarantia;
	private String lugarExpedicion;
	private String fechaExpedicion;
	private Double vigencia;
	private String entidadEmisora;

	
	/**
	 * 
	 */
	public Garantia() {
		// TODO Auto-generated constructor stub
	}


	/**
	 * @param claseGarantia
	 * @param monto
	 * @param numeroGarantia
	 * @param lugarExpedicion
	 * @param fechaExpedicion
	 * @param vigencia
	 * @param entidadEmisora
	 */
	public Garantia(String claseGarantia, Double monto, String numeroGarantia, String lugarExpedicion,
			String fechaExpedicion, Double vigencia, String entidadEmisora) {
		super();
		this.claseGarantia = claseGarantia;
		this.monto = monto;
		this.numeroGarantia = numeroGarantia;
		this.lugarExpedicion = lugarExpedicion;
		this.fechaExpedicion = fechaExpedicion;
		this.vigencia = vigencia;
		this.entidadEmisora = entidadEmisora;
	}


	/**
	 * @return the claseGarantia
	 */
	public String getClaseGarantia() {
		return claseGarantia;
	}


	/**
	 * @param claseGarantia the claseGarantia to set
	 */
	public void setClaseGarantia(String claseGarantia) {
		this.claseGarantia = claseGarantia;
	}


	/**
	 * @return the monto
	 */
	public Double getMonto() {
		return monto;
	}


	/**
	 * @param monto the monto to set
	 */
	public void setMonto(Double monto) {
		this.monto = monto;
	}


	/**
	 * @return the numeroGarantia
	 */
	public String getNumeroGarantia() {
		return numeroGarantia;
	}


	/**
	 * @param numeroGarantia the numeroGarantia to set
	 */
	public void setNumeroGarantia(String numeroGarantia) {
		this.numeroGarantia = numeroGarantia;
	}


	/**
	 * @return the lugarExpedicion
	 */
	public String getLugarExpedicion() {
		return lugarExpedicion;
	}


	/**
	 * @param lugarExpedicion the lugarExpedicion to set
	 */
	public void setLugarExpedicion(String lugarExpedicion) {
		this.lugarExpedicion = lugarExpedicion;
	}


	/**
	 * @return the fechaExpedicion
	 */
	public String getFechaExpedicion() {
		return fechaExpedicion;
	}


	/**
	 * @param fechaExpedicion the fechaExpedicion to set
	 */
	public void setFechaExpedicion(String fechaExpedicion) {
		this.fechaExpedicion = fechaExpedicion;
	}


	/**
	 * @return the vigencia
	 */
	public Double getVigencia() {
		return vigencia;
	}


	/**
	 * @param vigencia the vigencia to set
	 */
	public void setVigencia(Double vigencia) {
		this.vigencia = vigencia;
	}


	/**
	 * @return the entidadEmisora
	 */
	public String getEntidadEmisora() {
		return entidadEmisora;
	}


	/**
	 * @param entidadEmisora the entidadEmisora to set
	 */
	public void setEntidadEmisora(String entidadEmisora) {
		this.entidadEmisora = entidadEmisora;
	}

	
}
