/**
 * 
 */
package org.sieca.everis.pdcc.model.transbordoMercancia;

/**
 * @author ytorregl
 *
 */
public class Manifiesto {

	private String fechaManifiesto;
	private String fechaPrevistaLlegada;
	private String fechaPrevistaSalida;
	private String lugarDestino;
	private String lugarSalida;
	private String medioTransporte;
	private String numeroManifiesto;
	private String tipoManifiesto;
	private double cantidadConocimientoEmbarque;
	/**
	 * 
	 */
	public Manifiesto() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param fechaManifiesto
	 * @param fechaPrevistaLlegada
	 * @param fechaPrevistaSalida
	 * @param lugarDestino
	 * @param lugarSalida
	 * @param medioTransporte
	 * @param numeroManifiesto
	 * @param tipoManifiesto
	 * @param cantidadConocimientoEmbarque
	 */
	public Manifiesto(String fechaManifiesto, String fechaPrevistaLlegada, String fechaPrevistaSalida,
			String lugarDestino, String lugarSalida, String medioTransporte, String numeroManifiesto,
			String tipoManifiesto, double cantidadConocimientoEmbarque) {
		super();
		this.fechaManifiesto = fechaManifiesto;
		this.fechaPrevistaLlegada = fechaPrevistaLlegada;
		this.fechaPrevistaSalida = fechaPrevistaSalida;
		this.lugarDestino = lugarDestino;
		this.lugarSalida = lugarSalida;
		this.medioTransporte = medioTransporte;
		this.numeroManifiesto = numeroManifiesto;
		this.tipoManifiesto = tipoManifiesto;
		this.cantidadConocimientoEmbarque = cantidadConocimientoEmbarque;
	}
	/**
	 * @return the fechaManifiesto
	 */
	public String getFechaManifiesto() {
		return fechaManifiesto;
	}
	/**
	 * @param fechaManifiesto the fechaManifiesto to set
	 */
	public void setFechaManifiesto(String fechaManifiesto) {
		this.fechaManifiesto = fechaManifiesto;
	}
	/**
	 * @return the fechaPrevistaLlegada
	 */
	public String getFechaPrevistaLlegada() {
		return fechaPrevistaLlegada;
	}
	/**
	 * @param fechaPrevistaLlegada the fechaPrevistaLlegada to set
	 */
	public void setFechaPrevistaLlegada(String fechaPrevistaLlegada) {
		this.fechaPrevistaLlegada = fechaPrevistaLlegada;
	}
	/**
	 * @return the fechaPrevistaSalida
	 */
	public String getFechaPrevistaSalida() {
		return fechaPrevistaSalida;
	}
	/**
	 * @param fechaPrevistaSalida the fechaPrevistaSalida to set
	 */
	public void setFechaPrevistaSalida(String fechaPrevistaSalida) {
		this.fechaPrevistaSalida = fechaPrevistaSalida;
	}
	/**
	 * @return the lugarDestino
	 */
	public String getLugarDestino() {
		return lugarDestino;
	}
	/**
	 * @param lugarDestino the lugarDestino to set
	 */
	public void setLugarDestino(String lugarDestino) {
		this.lugarDestino = lugarDestino;
	}
	/**
	 * @return the lugarSalida
	 */
	public String getLugarSalida() {
		return lugarSalida;
	}
	/**
	 * @param lugarSalida the lugarSalida to set
	 */
	public void setLugarSalida(String lugarSalida) {
		this.lugarSalida = lugarSalida;
	}
	/**
	 * @return the medioTransporte
	 */
	public String getMedioTransporte() {
		return medioTransporte;
	}
	/**
	 * @param medioTransporte the medioTransporte to set
	 */
	public void setMedioTransporte(String medioTransporte) {
		this.medioTransporte = medioTransporte;
	}
	/**
	 * @return the numeroManifiesto
	 */
	public String getNumeroManifiesto() {
		return numeroManifiesto;
	}
	/**
	 * @param numeroManifiesto the numeroManifiesto to set
	 */
	public void setNumeroManifiesto(String numeroManifiesto) {
		this.numeroManifiesto = numeroManifiesto;
	}
	/**
	 * @return the tipoManifiesto
	 */
	public String getTipoManifiesto() {
		return tipoManifiesto;
	}
	/**
	 * @param tipoManifiesto the tipoManifiesto to set
	 */
	public void setTipoManifiesto(String tipoManifiesto) {
		this.tipoManifiesto = tipoManifiesto;
	}
	/**
	 * @return the cantidadConocimientoEmbarque
	 */
	public double getCantidadConocimientoEmbarque() {
		return cantidadConocimientoEmbarque;
	}
	/**
	 * @param cantidadConocimientoEmbarque the cantidadConocimientoEmbarque to set
	 */
	public void setCantidadConocimientoEmbarque(double cantidadConocimientoEmbarque) {
		this.cantidadConocimientoEmbarque = cantidadConocimientoEmbarque;
	}


	
	
}
