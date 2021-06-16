/**
 * 
 */
package org.sieca.everis.pdcc.model.oea;

/**
 * @author ytorregl
 *
 */
public class Resultado {
	private String fechaResolucion;
	private String estadoSolicitud;
	private String observaciones;
	private String fechaInicioVigencia;
	private String fechaFinVigencia;
	/**
	 * 
	 */
	public Resultado() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param fechaResolucion
	 * @param estadoSolicitud
	 * @param observaciones
	 * @param fechaInicioVigencia
	 * @param fechaFinVigencia
	 */
	public Resultado(String fechaResolucion, String estadoSolicitud, String observaciones, String fechaInicioVigencia,
			String fechaFinVigencia) {
		super();
		this.fechaResolucion = fechaResolucion;
		this.estadoSolicitud = estadoSolicitud;
		this.observaciones = observaciones;
		this.fechaInicioVigencia = fechaInicioVigencia;
		this.fechaFinVigencia = fechaFinVigencia;
	}
	/**
	 * @return the fechaResolucion
	 */
	public String getFechaResolucion() {
		return fechaResolucion;
	}
	/**
	 * @param fechaResolucion the fechaResolucion to set
	 */
	public void setFechaResolucion(String fechaResolucion) {
		this.fechaResolucion = fechaResolucion;
	}
	/**
	 * @return the estadoSolicitud
	 */
	public String getEstadoSolicitud() {
		return estadoSolicitud;
	}
	/**
	 * @param estadoSolicitud the estadoSolicitud to set
	 */
	public void setEstadoSolicitud(String estadoSolicitud) {
		this.estadoSolicitud = estadoSolicitud;
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
	/**
	 * @return the fechaInicioVigencia
	 */
	public String getFechaInicioVigencia() {
		return fechaInicioVigencia;
	}
	/**
	 * @param fechaInicioVigencia the fechaInicioVigencia to set
	 */
	public void setFechaInicioVigencia(String fechaInicioVigencia) {
		this.fechaInicioVigencia = fechaInicioVigencia;
	}
	/**
	 * @return the fechaFinVigencia
	 */
	public String getFechaFinVigencia() {
		return fechaFinVigencia;
	}
	/**
	 * @param fechaFinVigencia the fechaFinVigencia to set
	 */
	public void setFechaFinVigencia(String fechaFinVigencia) {
		this.fechaFinVigencia = fechaFinVigencia;
	}
	
	
	

}
