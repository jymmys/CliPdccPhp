/**
 * 
 */
package org.sieca.everis.pdcc.model.permiso;

/**
 * @author ytorregl
 *
 */
public class Evento {
	
	private String codigoEvento;
	private String fechaEvento;
	private String paisEvento;
	private String referencia;
	private String observaciones;
	/**
	 * 
	 */
	public Evento() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param codigoEvento
	 * @param fechaEvento
	 * @param paisEvento
	 * @param referencia
	 * @param observaciones
	 */
	public Evento(String codigoEvento, String fechaEvento, String paisEvento, String referencia, String observaciones) {
		super();
		this.codigoEvento = codigoEvento;
		this.fechaEvento = fechaEvento;
		this.paisEvento = paisEvento;
		this.referencia = referencia;
		this.observaciones = observaciones;
	}
	/**
	 * @return the codigoEvento
	 */
	public String getCodigoEvento() {
		return codigoEvento;
	}
	/**
	 * @param codigoEvento the codigoEvento to set
	 */
	public void setCodigoEvento(String codigoEvento) {
		this.codigoEvento = codigoEvento;
	}
	/**
	 * @return the fechaEvento
	 */
	public String getFechaEvento() {
		return fechaEvento;
	}
	/**
	 * @param fechaEvento the fechaEvento to set
	 */
	public void setFechaEvento(String fechaEvento) {
		this.fechaEvento = fechaEvento;
	}
	/**
	 * @return the paisEvento
	 */
	public String getPaisEvento() {
		return paisEvento;
	}
	/**
	 * @param paisEvento the paisEvento to set
	 */
	public void setPaisEvento(String paisEvento) {
		this.paisEvento = paisEvento;
	}
	/**
	 * @return the referencia
	 */
	public String getReferencia() {
		return referencia;
	}
	/**
	 * @param referencia the referencia to set
	 */
	public void setReferencia(String referencia) {
		this.referencia = referencia;
	}
	/**
	 * @return the observaciones
	 */
	public String getObservaciones() {
		return observaciones;
	}
	/**
	 * @param observaciones the observaciones to set
	 */
	public void setObservaciones(String observaciones) {
		this.observaciones = observaciones;
	}


	

}
